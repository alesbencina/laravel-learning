import type { AppProps } from 'next/app';
import AppComponent from "../components/App";
import '../src/styles/globals.css'

function MyApp({ Component, pageProps, router }: AppProps) {
    return <AppComponent Component={Component} pageProps={pageProps} router={router} />;
}
export default MyApp;
