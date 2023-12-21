/** @type {import('next').NextConfig} */
const nextConfig = {
    images: {
        domains: ['laravel-learning.ddev.site'],
        loader: 'akamai',
        path: '',
    },
    assetPrefix: './',
}

module.exports = nextConfig
