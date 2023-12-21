import {GetServerSideProps, NextPage} from "next";
import {BlogPostInterface} from "@/app/services/models/blog";
import {FeaturedBlogPosts} from "../components/Blog/components/FeaturedBlogPosts";
import {fetchBlogPosts} from "@/app/services/blog/blogService";

interface HomepageDetailProps {
    blogPosts: BlogPostInterface[];
}

const HomePage: NextPage<HomepageDetailProps> = ({blogPosts}) => {
    return (
        <div>hello</div>
    );
};


export default HomePage;
