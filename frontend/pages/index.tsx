import type {AppProps} from 'next/app';
import BlogPostsGrid from "../components/Blog/components/FeaturedBlogs";

function Homepage({Component, pageProps}: AppProps) {
    return (
        <BlogPostsGrid></BlogPostsGrid>
    )
}

export default Homepage;
