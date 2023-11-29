/**
 * @file blog.ts
 *
 * @fileoverview Exports interfaces related to the blog module.
 */

export interface ITag {
  id: number;
  name: string;
  url_alias: string;
  created_at: string;
  updated_at: string;
  pivot: {
    blog_id: number;
    tag_id: number;
  };
  files: File[];
}

export interface Author {
  id: number;
  name: string;
  email: string;
  email_verified_at: string;
  created_at: string;
  updated_at: string;
  username: string;
}

export interface File {
  id: number;
  name: string;
  path: string;
  created_at: string;
  updated_at: string;
  url: string;
  pivot: {
    tag_id?: number;
    file_id?: number;
    blog_post_id?: number;
  };
}

export interface BlogPostInterface {
  id: number;
  title: string;
  description: string;
  url_alias: string;
  tag_id: number | null;
  author_id: number;
  status: number;
  summary: string;
  created_at: string;
  updated_at: string;
  tag: ITag[];
  author: Author;
  files: File[];
}
