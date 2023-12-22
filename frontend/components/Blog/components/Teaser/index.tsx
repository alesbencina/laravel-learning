import React from "react";
import {BlogPostInterface} from "@/app/services/models/blog";
import ImageBase from "../../../Image";
import Link from "next/link";

interface BlogTeaserProps {
    post: BlogPostInterface;
}

const BlogTeaser: React.FC<BlogTeaserProps> = ({ post }) => {
    return (
        <div key={post.id} className="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
            <div className="w-full h-48 object-cover">
                {post.files.map((file,index) => (
                    <ImageBase
                        key={index}
                        alt={file.name}
                        title={post.title}
                        src={file.path}
                        width={350}
                        height={250}
                    />
                ))}
            </div>
            <div className="p-4 flex flex-col flex-grow">
                <Link href={"/blog/" + post.url_alias} key={post.id}>
                    <h3 className="font-bold text-lg mb-2">{post.title}</h3>
                </Link>

                <p className="text-gray-700 text-base mb-4">
                    {post.summary}
                </p>
                <div className="flex flex-wrap gap-2 mb-4">
                    {post.tag.map((tag) => (
                        <Link href={`/tag/${tag.url_alias}`} key={tag.id}>
                            <a className="text-xs bg-gray-200 hover:bg-gray-300 text-gray-800 px-2 py-1 rounded-full transition duration-300 ease-in-out">
                                {tag.name}
                            </a>
                        </Link>
                    ))}
                </div>
                <div className="flex items-center justify-between mt-auto">
                    <span className="text-sm text-gray-600">{new Date(post.created_at).toLocaleDateString()}</span>
                    <Link href={`/blog/${post.url_alias}`} key={post.id} target="_blank">
                        Read More
                    </Link>
                </div>
            </div>
        </div>
    );
}

export default BlogTeaser;
