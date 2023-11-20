import axios from 'axios';
import {GetServerSideProps, NextPage} from 'next';
import hljs from 'highlight.js';
import 'highlight.js/styles/github.css';
import SafeHTMLContent from "../../components/Content/SafeHtmlContent"; // Or any other style you prefer

interface BlogPostProps {
    post: {
        title: string;
        description: string;
    };
}

const BlogPost: NextPage<BlogPostProps> = ({post}) => {
    return (
        <article className="mt-8 prose prose-slate mx-auto lg:prose-lg">
            <h1>{post.title}</h1>
            <div>
                <SafeHTMLContent html={post.description} ></SafeHTMLContent>
            </div>
        </article>
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

export default BlogPost;
