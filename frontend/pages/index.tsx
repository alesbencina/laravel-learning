import type { AppProps } from 'next/app';
import AppComponent from "../components/App";
import MyApp from "./_app";

function Homepage({ Component, pageProps }: AppProps) {
    return (
        <div>homepage</div>
    )
}

export default Homepage;
