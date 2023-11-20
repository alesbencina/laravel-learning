import axios from 'axios';
import {GetServerSideProps, NextPage} from 'next';
import BlogPostDetail from "../../components/Blog/detail";

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
    const {url_alias} = context.params as { url_alias: string };

    const res = await axios.get(`http://laravel-learning.ddev.site/api/v1/blog/${url_alias}`);
    const post = res.data;
    console.log(post)

    return {
        props: {post},
    };
};

export default BlogPostPage;
