import {GetServerSideProps, NextPage} from 'next';
import BlogPostDetail from "../../components/Blog";
import {fetchBlogPostByUrlAlias} from "@/app/services/blog/blogService";
import {BlogPostInterface} from "@/app/services/models/blog";

interface BlogPostDetailProps {
    post: BlogPostInterface;
}
const BlogPostPage: NextPage<BlogPostDetailProps> = ({ post }) => {
    return <BlogPostDetail post={post} />;
};

export const getServerSideProps: GetServerSideProps = async (context) => {
    const { url_alias } = context.params as { url_alias: string };

    try {
        const post = await fetchBlogPostByUrlAlias(url_alias);

        return {
            props: { post },
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

export default BlogPostPage;
