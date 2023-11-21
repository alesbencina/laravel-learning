import 'highlight.js/styles/github.css';
import React from "react";
import SafeHTMLContent from "../Content/SafeHtmlContent";
import ImageBase from "../Image";

interface BlogPostProps {
    post: {
        title: string;
        description: string;
    };
}

export const BlogPostDetail =({
    post
}: BlogPostProps) => {
    console.log(post.tag[0].files[0].url);
    return (
            <article className="mt-8 prose prose-slate mx-auto lg:prose-lg">
                <ImageBase src={post.tag[0].files[0].url} alt="neki"  title="neki" width={500} height={200}></ImageBase>
                <h1>{post.title}</h1>
                <div>
                    <SafeHTMLContent html={post.description} ></SafeHTMLContent>
                </div>
            </article>

    );
}

export default BlogPostDetail;
