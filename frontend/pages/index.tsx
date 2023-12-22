import {GetStaticProps, NextPage} from "next";
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

// Replace getServerSideProps with getStaticProps
export const getStaticProps: GetStaticProps = async (context) => {
    try {
        const blogPosts = await fetchBlogPosts();
        return { props: { blogPosts } };
    } catch (error) {
        return { notFound: true }; // Return a 404 page
    }
};

export default HomePage;
