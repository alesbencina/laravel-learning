import type { AppProps } from 'next/app';
import Layout from "../Layout";

function AppComponent({ Component, pageProps }: AppProps) {
    return (
        <Layout>
            <Component {...pageProps} />
        </Layout>
    );
}
export default AppComponent;
