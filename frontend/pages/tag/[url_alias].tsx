import { GetStaticPaths, GetStaticProps, NextPage} from 'next';
import {ITag} from "@/app/services/models/blog";
import {fetchTagByUrlAlias} from "@/app/services/tag/tagService";
import TagDetail from "../../components/Tag/Detail";

interface TagDetailProps {
    tag: ITag;
}

const TagPage: NextPage<TagDetailProps> = ({tag}) => {
    return (
        <TagDetail tag={tag}/>
    );
};

export const getStaticPaths: GetStaticPaths = async () => {
    // Hardcoded array of blog post aliases for testing
    const aliases = ['rust', 'laravel', 'drupal']; // Replace these with your actual blog post aliases

    const paths = aliases.map((alias) => ({
        params: {url_alias: alias},
    }));

    return {
        paths,
        fallback: false // Can set to 'blocking' if you want to enable ISR for new posts
    };
};

// Replace getServerSideProps with getStaticProps
export const getStaticProps: GetStaticProps = async (context) => {
    const {url_alias} = context.params as { url_alias: string };
    try {
        const tag = await fetchTagByUrlAlias(url_alias);
        return {props: {tag}};
    } catch (error) {
        return {notFound: true}; // Return a 404 page
    }
};

export default TagPage;
