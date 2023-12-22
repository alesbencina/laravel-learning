/** @type {import('next').NextConfig} */

const repo = 'laravel-learning'
const assetPrefix = `/${repo}/`
const basePath = `/${repo}`

const nextConfig = {
    images: {
        domains: ['laravel-learning.ddev.site'],
        formats: ['image/avif', 'image/webp'],
        unoptimized: true
    },
    assetPrefix: assetPrefix,
    basePath: basePath,
}

module.exports = nextConfig
