import type { AppProps } from 'next/app';
import AppComponent from "../../components/App";
import '../styles/globals.css'

function MyApp({ Component, pageProps }: AppProps) {
    return <AppComponent Component={Component} pageProps={pageProps} />;
}

export default MyApp;
