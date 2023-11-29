// services/blogService.js
import axios from 'axios';

const apiUrl = process.env.BACKEND_URL;

export const fetchBlogPostByUrlAlias = async (urlAlias) => {
    try {
        const response = await axios.get(`${apiUrl}/blog/${urlAlias}`);
        return response.data;
    } catch (error) {
        if (axios.isAxiosError(error)) {
            // You can handle specific axios errors here if needed
            throw error;
        }
        throw new Error('Error fetching blog post');
    }
};

export const fetchBlogPosts = async () => {
    try {
        const response = await axios.get(`${apiUrl}/blog-posts`);
        return response.data;
    } catch (error) {
        if (axios.isAxiosError(error)) {
            // You can handle specific axios errors here if needed
            throw error;
        }
        throw new Error('Error fetching blog post');
    }
};
