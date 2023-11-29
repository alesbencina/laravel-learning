import 'highlight.js/styles/github.css';
import React from "react";

interface BlogPostProps {
    post: {
        title: string;
        description: string;
    };
}
export const BlogTeaser =({post}: BlogPostProps) => {
    return (
        <div>
            <div className="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                <div className="md:flex">
                    <div className="md:flex-shrink-0">
                        <img className="h-48 w-full object-cover md:w-48" src="job-image.jpg" alt="Job Image"></img>
                    </div>
                    <div className="p-8">
                        <div className="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Job Title</div>
                        <a href="#" className="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Featured
                            Job</a>
                        <p className="mt-2 text-gray-500">This is a brief description of the featured job. It should be engaging
                            and informative...</p>
                        <button className="mt-4 bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                            Read More
                        </button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default BlogTeaser;
