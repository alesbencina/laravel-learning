import axios from 'axios';
import {GetServerSideProps, NextPage} from 'next';
import BlogPostDetail from "../../components/Blog";

interface BlogPostProps {
    post: {
        title: string;
        description: string;
    };
}

const BlogPostPage: NextPage<BlogPostProps> = ({post}) => {
    return (
        <BlogPostDetail
            post={post}
        >
        </BlogPostDetail>
    );
};

export const getServerSideProps: GetServerSideProps = async (context) => {
    const { url_alias } = context.params as { url_alias: string };

    try {
        const apiUrl = process.env.BACKEND_URL;
        const res = await axios.get(`${apiUrl}/blog/${url_alias}`);
        const post = res.data;

        return {
            props: { post },
        };
    } catch (error) {
        if (axios.isAxiosError(error) && error.response?.status === 404) {
            // Redirect to a custom 'Not Found' page
            return {
                redirect: {
                    destination: '/404',
                    permanent: false,
                },
            };
        }
        return {
            redirect: {
                destination: '/404',
                permanent: false,
            },
        };
    }
};
export default BlogPostPage;
