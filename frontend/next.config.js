/** @type {import('next').NextConfig} */
const nextConfig = {
    images: {
        domains: ['laravel-learning.ddev.site'],
        unoptimized: true
    },
    basePath: '/laravel-learning',
}

module.exports = nextConfig
