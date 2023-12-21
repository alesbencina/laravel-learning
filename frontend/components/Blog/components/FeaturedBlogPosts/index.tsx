import React from "react";
import BlogTeaser from "../Teaser";
import { BlogPostInterface } from "@/app/services/models/blog";

interface FeaturedBlogPostsProps {
    posts: BlogPostInterface[]; // Define the type of the 'posts' prop
}

export const FeaturedBlogPosts: React.FC<FeaturedBlogPostsProps> = ({posts}) => {
    return (
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            {posts.map((post) => (
                <BlogTeaser key={post.id} post={post}/>
            ))}
        </div>
    );
}

export default FeaturedBlogPosts;
