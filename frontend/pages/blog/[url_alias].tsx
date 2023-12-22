import {GetStaticPaths, GetStaticProps, NextPage} from 'next';
import BlogPostDetail from "../../components/Blog";
import {fetchBlogPostByUrlAlias} from "@/app/services/blog/blogService";
import {BlogPostInterface} from "@/app/services/models/blog";

interface BlogPostDetailProps {
    post: BlogPostInterface;
}
const BlogPostPage: NextPage<BlogPostDetailProps> = ({ post }) => {
    return <BlogPostDetail post={post} />;
};

// Implement getStaticPaths for a single page
export const getStaticPaths: GetStaticPaths = async () => {
    // Hardcoded array of blog post aliases for testing
    const aliases = [
        'rust-serde',
        'about'
    ];

    const paths = aliases.map((alias) => ({
        params: { url_alias: alias },
    }));

    return {
        paths,
        fallback: false // Can set to 'blocking' if you want to enable ISR for new posts
    };
};

// Replace getServerSideProps with getStaticProps
export const getStaticProps: GetStaticProps = async (context) => {
    const { url_alias } = context.params as { url_alias: string };
    try {
        const post = await fetchBlogPostByUrlAlias(url_alias);
        return { props: { post } };
    } catch (error) {
        console.log(error);
        return { notFound: true }; // Return a 404 page
    }
};

export default BlogPostPage;
