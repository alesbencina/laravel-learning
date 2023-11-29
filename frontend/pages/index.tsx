import {GetServerSideProps, NextPage} from "next";
import {BlogPostInterface} from "@/app/services/models/blog";
import {FeaturedBlogPosts} from "../components/Blog/components/FeaturedBlogPosts";
import {fetchBlogPosts} from "@/app/services/blog/blogService";

interface HomepageDetailProps {
    blogPosts: BlogPostInterface[];
}

const HomePage: NextPage<HomepageDetailProps> = ({blogPosts}) => {
    return (
        <FeaturedBlogPosts posts={blogPosts}></FeaturedBlogPosts>
    );
};

export const getServerSideProps: GetServerSideProps = async (context) => {

    try {
        const blogPosts = await fetchBlogPosts();

        return {
            props: { blogPosts },
        };
    } catch (error) {
        // Handle the error based on the type or status
        return {
            props: {},
        };
    }
};

export default HomePage;
