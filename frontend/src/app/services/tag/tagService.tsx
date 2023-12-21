// services/blogService.js
import axios from 'axios';

const apiUrl = process.env.BACKEND_URL;

export const fetchTagByUrlAlias = async (urlAlias: any) => {
    try {
        const response = await axios.get(`${apiUrl}/tag/${urlAlias}`);
        return response.data;
    } catch (error) {
        if (axios.isAxiosError(error)) {
            // You can handle specific axios errors here if needed
            throw error;
        }
        throw new Error('Error fetching tag');
    }
};

