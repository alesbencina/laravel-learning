import axios from 'axios';
import { GetServerSideProps, NextPage } from 'next';
import Layout from "../../components/Layout";

interface BlogPostProps {
    post: {
        title: string;
        content: string;
        // Add other relevant types for your blog post
    };
}

const BlogPost: NextPage<BlogPostProps> = ({ post }) => {
    return (
        <div>
            blog post detail page
        </div>
    );
};

export const getServerSideProps: GetServerSideProps = async (context) => {
    const { url_alias } = context.params as { url_alias: string };
    const res = await axios.get(`http://laravel-learning.ddev.site/api/v1/blog/${url_alias}`);
    const post = res.data;

    return {
        props: { post },
    };
};

export default BlogPost;
