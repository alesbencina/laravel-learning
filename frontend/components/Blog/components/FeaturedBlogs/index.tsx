import React from "react";
import BlogTeaser from "../Teaser";
import {GetServerSideProps} from "next";
import axios from "axios/index";

interface BlogPostProps {
    post: {
        title: string;
        description: string;
    };
}

export const BlogPostsGrid = () => {
    return (
        <BlogTeaser></BlogTeaser>
    );
}

export default BlogPostsGrid;
