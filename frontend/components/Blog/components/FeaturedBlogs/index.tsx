import 'highlight.js/styles/github.css';
import SafeHTMLContent from "../../Content/SafeHtmlContent";
import React from "react";

interface BlogPostProps {
    post: {
        title: string;
        description: string;
    };
}

export const BlogPostsGrid =({
    post
}: BlogPostProps) => {
    return (
        <article className="mt-8 prose prose-slate mx-auto lg:prose-lg">
            <h1>{post.title}</h1>
            <div>
                <SafeHTMLContent html={post.description} ></SafeHTMLContent>
            </div>
        </article>
    );
}

export default BlogPostsGrid;
