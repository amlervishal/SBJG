# Dependency & Plugin Analysis for p-citizenm.html

## Overview
Analysis of dependencies and plugins loaded on the citizenM Bowery project page to identify opportunities for reducing clutter and modernizing the tech stack.

---

## Current Dependencies

### CSS Libraries (5 files)
1. **Bootstrap 4** (`plugins/bootstrap/bootstrap.min.css`)
   - Full framework: ~155KB minified
   - Usage: Navigation navbar, grid system, utility classes

2. **Lightbox2** (`plugins/lightbox2/css/lightbox.min.css`)
   - Size: ~10KB
   - **NOT USED on this page** ❌

3. **Animate.css** (`plugins/animate/animate.css`)
   - Size: ~70KB (full library)
   - **NOT USED on this page** ❌

4. **Slick Carousel** (`plugins/slick/slick.css`)
   - Size: ~3KB
   - Usage: Image slider ✓

5. **Custom Styles** (`css/style.css`)
   - Usage: Custom styling ✓

### JavaScript Libraries (10 files)
1. **jQuery** (`plugins/jquery/jquery.min.js`)
   - Size: ~85KB minified
   - Required by: Bootstrap, Slick, multiple other plugins

2. **Bootstrap JS** (`plugins/bootstrap/bootstrap.min.js`)
   - Size: ~50KB
   - Usage: Navbar collapse/toggle ✓

3. **Parallax** (`plugins/parallax/jquery.parallax-1.1.3.js`)
   - **NOT USED on this page** ❌

4. **Lightbox2 JS** (`plugins/lightbox2/js/lightbox.min.js`)
   - Size: ~15KB
   - **NOT USED on this page** ❌

5. **Slick Carousel** (`plugins/slick/slick.min.js`)
   - Size: ~28KB
   - Usage: Image slider ✓

6. **Filterizr** (`plugins/filterizr/jquery.filterizr.min.js`)
   - Size: ~20KB
   - **NOT USED on this page** ❌

7. **Smooth Scroll** (`plugins/smooth-scroll/smooth-scroll.min.js`)
   - Size: ~4KB
   - **MINIMAL VALUE on this page** ⚠️

8. **Google Maps API** (external CDN)
   - **NOT USED on this page** ❌

9. **Google Maps Wrapper** (`plugins/google-map/gmap.js`)
   - **NOT USED on this page** ❌

10. **Custom Script** (`js/script.js`)
    - Usage: Custom functionality ✓

### Third-Party Services
- **Google Analytics** (gtag.js) ✓

---

## Unused Dependencies on This Page

### Completely Unused (Can Remove)
- ❌ Lightbox2 (CSS + JS) - ~25KB
- ❌ Animate.css - ~70KB
- ❌ Parallax - ~10KB
- ❌ Filterizr - ~20KB
- ❌ Google Maps (API + wrapper) - ~100KB+
- ❌ Smooth Scroll - ~4KB (minimal benefit)

**Total Savings: ~229KB+ just by removing unused scripts**

---

## Modernization Opportunities

### Option 1: Keep Bootstrap, Optimize Loading
**Effort: LOW | Impact: MEDIUM**

#### Changes:
1. Load dependencies conditionally per page
2. Remove unused plugins (saves ~229KB)
3. Use Bootstrap's custom build to include only used components
   - Keep: Grid, Navbar, Utilities
   - Remove: Carousel, Modal, Popover, Tooltip (unused)

#### Estimated Size Reduction:
- Current total: ~450KB (all dependencies)
- Optimized: ~150KB (66% reduction)

#### Pros:
- Minimal code changes
- Familiar tech stack
- Quick implementation

#### Cons:
- Still using jQuery (legacy)
- Bootstrap is heavy for simple pages

---

### Option 2: Replace Bootstrap with Modern Alternatives
**Effort: MEDIUM | Impact: HIGH**

#### Recommended: Tailwind CSS
**Why Tailwind?**
- Utility-first CSS (similar to Bootstrap utilities)
- Tree-shakeable (only includes used classes)
- No JavaScript dependency
- Modern, widely adopted

**For shadcn/ui:**
- Built on Tailwind + Radix UI
- React-based components
- **NOT suitable for static HTML** (requires React framework)

#### Migration Path:
1. Replace Bootstrap grid → Tailwind flexbox/grid utilities
2. Replace navbar → Custom navbar with Tailwind
3. Keep Slick Carousel (or replace with Swiper)
4. Remove jQuery entirely

#### New Stack:
```
CSS:
- Tailwind CSS (~10KB after purge for this page)
- Slick CSS or Swiper CSS (~3KB)

JavaScript:
- Swiper JS (~30KB) [modern, no jQuery needed]
  OR keep Slick + jQuery mini (~100KB)
- Custom script (minimal)
```

#### Estimated Size:
- Total: ~40-110KB (70-90% reduction)

#### Pros:
- Modern, maintainable
- Significantly smaller bundle
- No jQuery dependency (if using Swiper)
- Better performance

#### Cons:
- Requires rewriting HTML/CSS
- Learning curve for Tailwind
- More initial effort

---

### Option 3: Minimal Vanilla Approach
**Effort: MEDIUM-HIGH | Impact: HIGHEST**

#### Replace Everything with Vanilla JS + Minimal CSS
1. **CSS Framework**: None (custom CSS) or lightweight (PicoCSS, Skeleton)
2. **Slider**: Swiper (~30KB) or custom vanilla slider
3. **Navigation**: Custom mobile menu (vanilla JS)

#### New Stack:
```
CSS:
- Custom CSS only or PicoCSS (~10KB)
- Swiper CSS (~3KB)

JavaScript:
- Swiper JS (~30KB)
- Custom vanilla JS (~2-5KB)
```

#### Estimated Size:
- Total: ~45KB (90% reduction)

#### Pros:
- Lightest possible
- Zero dependencies
- Maximum performance
- Full control

#### Cons:
- Most effort required
- Need to build components from scratch
- Maintenance responsibility

---

## Specific Recommendations for This Page

### Immediate Quick Wins (15 minutes)
1. **Remove unused scripts** from p-citizenm.html:
   ```html
   <!-- Remove these lines -->
   <link rel="stylesheet" href="plugins/lightbox2/css/lightbox.min.css">
   <link rel="stylesheet" href="plugins/animate/animate.css">
   <script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
   <script src="plugins/lightbox2/js/lightbox.min.js"></script>
   <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
   <script src="plugins/smooth-scroll/smooth-scroll.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=..."></script>
   <script src="plugins/google-map/gmap.js"></script>
   ```
   **Savings: ~229KB**

### Short-term (1-2 days)
2. **Create page-specific templates**:
   - Project pages: Bootstrap + Slick only
   - Gallery pages: Add Lightbox when needed
   - Contact page: Add Maps only there

3. **Use async/defer** for non-critical scripts:
   ```html
   <script defer src="plugins/slick/slick.min.js"></script>
   ```

### Long-term (1-2 weeks)
4. **Migrate to Tailwind CSS**:
   - Replace Bootstrap classes with Tailwind
   - Remove jQuery dependency
   - Use Swiper instead of Slick
   - Build system with PostCSS + PurgeCSS

---

## Component-by-Component Analysis

### Navigation
**Current**: Bootstrap navbar (~70KB CSS+JS)
**Alternatives**:
- Tailwind utilities + 20 lines of vanilla JS (~1KB)
- Custom CSS + vanilla JS (~2KB)

### Image Slider
**Current**: Slick Carousel + jQuery (~115KB)
**Alternatives**:
- Swiper (no jQuery) (~30KB) ⭐ **RECOMMENDED**
- Splide (~25KB)
- Native CSS scroll snap (~0KB, limited features)

### Grid/Layout
**Current**: Bootstrap grid (~30KB)
**Alternatives**:
- Tailwind utilities (~5KB after purge) ⭐ **RECOMMENDED**
- CSS Grid (native, ~0KB)
- Flexbox (native, ~0KB)

---

## Recommended Action Plan

### Phase 1: Clean Up (Week 1)
✅ Remove unused dependencies per page
✅ Implement conditional loading
✅ Add async/defer to scripts
**Expected**: 40-50% size reduction

### Phase 2: Modernize Slider (Week 2)
✅ Replace Slick with Swiper
✅ Remove jQuery from slider pages
**Expected**: Additional 15-20% reduction

### Phase 3: Replace Bootstrap (Week 3-4)
✅ Install Tailwind CSS
✅ Rebuild navbar with Tailwind
✅ Convert grid/layout to Tailwind
✅ Remove Bootstrap + jQuery completely
**Expected**: Final 20-30% reduction

### Total Expected Reduction: 70-90%
**From ~450KB → ~50-100KB**

---

## Modern Stack Recommendation

```
CSS:
├── Tailwind CSS (~10-20KB after purge)
└── Swiper CSS (~3KB)

JavaScript:
├── Swiper JS (~30KB)
└── Custom vanilla JS (~5KB)

Total: ~50KB (89% smaller than current ~450KB)
```

### Key Benefits:
- ✅ Modern, maintainable codebase
- ✅ No jQuery dependency
- ✅ Faster page loads
- ✅ Better mobile performance
- ✅ Easier to customize
- ✅ Industry-standard tools

---

## Notes on shadcn/ui

While shadcn/ui is excellent, it's **not suitable for this project** because:
- Requires React/Next.js/Remix
- This is a static HTML site
- Would require complete rebuild

**Alternative**: Use Tailwind CSS directly with similar utility patterns that shadcn uses.

---

## Conclusion

**Quick wins**: Remove unused scripts today (saves ~229KB)
**Best long-term**: Migrate to Tailwind + Swiper (saves ~350KB, 78% reduction)
**Effort vs. Reward**: Phase 1 is LOW effort, HIGH impact - start there!
