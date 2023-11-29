import React from "react";
import BlogTeaser from "../Teaser";

export const FeaturedBlogPosts = ({posts}) => {
    return (
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            {posts.map((post) => (
                <BlogTeaser key={post.id} post={post}/>
            ))}
        </div>
    );
}

export default FeaturedBlogPosts;
