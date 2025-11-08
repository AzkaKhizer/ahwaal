# Ahwaal - Corporate Background Screening Website

A fully responsive corporate services website built with Next.js and custom CSS modules for a background-screening and verification company.

## Features

- ✅ **Responsive Design**: Fully optimized for desktop, tablet, and mobile devices
- ✅ **Custom CSS Modules**: No Tailwind - clean, scalable custom styles
- ✅ **Dynamic Content**: Services and blog data loaded from JSON files
- ✅ **Smooth Animations**: Scroll-triggered fade-in animations and hover effects
- ✅ **Modular Components**: Reusable React components with isolated styles
- ✅ **SEO Optimized**: Proper meta tags, semantic HTML, and accessibility features
- ✅ **Modern Design**: Professional tech-savvy design with gradient backgrounds

## Project Structure

```
├── app/
│   ├── layout.tsx          # Root layout with metadata
│   ├── page.tsx            # Main home page
│   └── globals.css         # Global styles and CSS variables
├── components/
│   ├── Navbar/             # Navigation header with dropdown
│   ├── Hero/               # Hero section with CTA buttons
│   ├── ClientsCarousel/    # Scrolling client logos
│   ├── HowItWorks/         # Process steps section
│   ├── ServicesGrid/       # Dynamic services grid
│   ├── WhyUs/              # Key differentiators
│   ├── Security/           # Security & compliance section
│   ├── Testimonials/       # Client testimonials
│   ├── BlogPreview/        # Latest blog posts
│   ├── CTAContact/         # Contact form
│   └── Footer/             # Footer with links and info
├── data/
│   ├── services.json       # Services data
│   └── blog.json           # Blog posts data
├── package.json
├── tsconfig.json
└── next.config.js
```

## Getting Started

### Prerequisites

- Node.js 18+ installed
- npm or yarn package manager

### Installation

1. Clone the repository or download the project files

2. Install dependencies:
```bash
npm install
```

3. Run the development server:
```bash
npm run dev
```

4. Open your browser and navigate to:
```
http://localhost:5000
```

The site should now be running locally!

## Available Scripts

- `npm run dev` - Start development server on port 5000
- `npm run build` - Build for production
- `npm start` - Start production server
- `npm run lint` - Run ESLint

## Customization

### Brand Colors

Edit the CSS variables in `app/globals.css`:

```css
:root {
  --primary-color: #0A4B78;      /* Deep blue */
  --accent-color: #00B4D8;       /* Teal/cyan */
  --success-color: #06D6A0;      /* Green */
  /* ... more variables */
}
```

### Services

Add or modify services in `data/services.json`:

```json
{
  "id": "service-name",
  "title": "Service Title",
  "description": "Service description",
  "icon": "🎓"
}
```

### Blog Posts

Add blog posts in `data/blog.json`:

```json
{
  "id": "1",
  "title": "Blog Post Title",
  "summary": "Brief summary",
  "date": "2025-10-15",
  "category": "Category Name"
}
```

## Future Enhancements

- [ ] Integrate headless CMS (Contentful, Sanity, or Strapi)
- [ ] Add dark mode toggle with localStorage
- [ ] Implement email integration for contact form
- [ ] Create individual service detail pages
- [ ] Add blog with pagination and search
- [ ] Integrate analytics and conversion tracking

## Technologies Used

- **Next.js 14+** - React framework with App Router
- **React 18+** - UI library
- **TypeScript** - Type safety
- **CSS Modules** - Component-scoped styling
- **Custom CSS** - No external CSS frameworks

## Performance & SEO

The website is optimized for:
- ✅ Fast page loads with Next.js optimization
- ✅ SEO-friendly with proper meta tags and semantic HTML
- ✅ Accessibility with ARIA labels and alt tags
- ✅ Responsive design with mobile-first approach

## License

This project is created for demonstration purposes.

## Support

For questions or issues, please contact the development team.
