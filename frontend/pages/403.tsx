import type { AppProps } from 'next/app';

function Forbidden({ Component, pageProps }: AppProps) {
    return (
        <div>Access denied</div>
    )
}

export default Forbidden;
