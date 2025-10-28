'use client'

import blogData from '@/data/blog.json'
import styles from './BlogPreview.module.css'

export default function BlogPreview() {
  return (
    <section id="blog" className={styles.section}>
      <div className={styles.container}>
        <h2 className={styles.title}>Latest Insights</h2>
        <p className={styles.subtitle}>
          Expert perspectives on background screening and compliance
        </p>
        <div className={styles.blogGrid}>
          {blogData.map((post) => (
            <article key={post.id} className={`${styles.blogCard} fade-in`}>
              <div className={styles.blogImage}>
                <div className={styles.placeholder}>📰</div>
                <div className={styles.category}>{post.category}</div>
              </div>
              <div className={styles.blogContent}>
                <div className={styles.date}>{new Date(post.date).toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' })}</div>
                <h3 className={styles.blogTitle}>{post.title}</h3>
                <p className={styles.blogSummary}>{post.summary}</p>
                <a href={`#blog-${post.id}`} className={styles.readMore}>
                  Read More →
                </a>
              </div>
            </article>
          ))}
        </div>
      </div>
    </section>
  )
}
