import 'highlight.js/styles/github.css';
import React from "react";
import {ITag} from "@/app/services/models/blog";
import FeaturedBlogPosts from "../../Blog/components/FeaturedBlogPosts";

export const TagDetail = ({tag}: ITag) => {
    return (
        <div key={tag.id}>
            <h1 className="text-3xl font-bold mb-4 py-8">{tag.name}</h1>
            <FeaturedBlogPosts posts={tag.blogposts}></FeaturedBlogPosts>
        </div>
    );
}

export default TagDetail;
