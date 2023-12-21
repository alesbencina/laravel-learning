import type { AppProps } from 'next/app';

function PageNotFound({ Component, pageProps }: AppProps) {
    return (
        <div>Internal server error</div>
    )
}

export default PageNotFound;
