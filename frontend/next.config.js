/** @type {import('next').NextConfig} */
const nextConfig = {
    images: {
        domains: ['laravel-learning.ddev.site'],
        formats: ['image/avif', 'image/webp'],
        unoptimized: true
    },
    basePath: '/laravel-learning',
    assetPrefix: '/laravel-learning',
}

module.exports = nextConfig
