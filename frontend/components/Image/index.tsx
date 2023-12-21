/**
 * @file index.tsx
 *
 * @fileoverview Renders an image optimized in case the .env file is set to do so.
 */
import NextImage from 'next/image';

export interface ImageProps {
    /**
     * The alternate text for the image.
     */
    alt: string;
    /**
     * The itle for the image.
     */
    title?: string;
    /**
     * The external src for the image.
     */
    src: string;
    /**
     * The width property for this image.
     */
    width: number | null | undefined;
    /**
     * The height property for this image.
     */
    height: number | null | undefined;
    /**
     * Portrait image source.
     */
    portraitSrc?: string;
    /**
     * Priority will make the image preload tag and not lazy load it.
     *
     * @default "false"
     */
    priority?: boolean;
}

export const ImageBase = ({
                          alt,
                          title,
                          src,
                          width,
                          height,
                          priority = false,
                      }: ImageProps) => (
    <NextImage
        src={decodeURIComponent(src)} // Next image expects the decoded URI to fetch.
        alt={alt}
        {...(title && { title })}
        {...(!width || !height
            ? { sizes: '100vw', fill: true }
            : { width, height })}
        {...(priority ? { priority } : false)}
    />
);

export default ImageBase;

