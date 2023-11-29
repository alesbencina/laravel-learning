import {GetServerSideProps, NextPage} from 'next';
import ITag from "@/app/services/models/blog";
import {fetchTagByUrlAlias} from "@/app/services/tag/tagService";
import TagDetail from "../../components/Tag/Detail";

interface TagDetailProps {
    tag: ITag;
}
const TagPage: NextPage<TagDetailProps> = ({ tag }) => {
    return (
        <TagDetail tag={tag} />
    );
};

export const getServerSideProps: GetServerSideProps = async (context) => {
    const { url_alias } = context.params as { url_alias: string };

    try {
        const tag = await fetchTagByUrlAlias(url_alias);

        return {
            props: { tag },
        };
    } catch (error) {
        // Handle the error based on the type or status
        return {
            redirect: {
                destination: '/404',
                permanent: false,
            },
        };
    }
};

export default TagPage;
