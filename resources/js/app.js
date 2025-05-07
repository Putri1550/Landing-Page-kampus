import './bootstrap';
import 'bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Initialize AOS
AOS.init({
  duration: 800,
  easing: 'ease-in-out',
  once: true
});

// Register ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

// Navbar scroll effect
const navbar = document.getElementById('mainNav');
window.addEventListener('scroll', () => {
  if (window.scrollY > 100) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    
    const targetId = this.getAttribute('href');
    if (targetId === '#') return;
    
    const targetElement = document.querySelector(targetId);
    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop - 80,
        behavior: 'smooth'
      });
    }
  });
});

// Advanced animations with GSAP
document.addEventListener('DOMContentLoaded', () => {
  // Hero section animation
  if (document.querySelector('.hero-section')) {
    gsap.from('.hero-section h1', {
      opacity: 0,
      y: 50,
      duration: 1,
      delay: 0.3
    });
    
    gsap.from('.hero-section p', {
      opacity: 0,
      y: 50,
      duration: 1,
      delay: 0.6
    });
    
    gsap.from('.hero-section .btn', {
      opacity: 0,
      y: 50,
      duration: 1,
      delay: 0.9,
      stagger: 0.2
    });
  }

  // Card animations
  gsap.utils.toArray('.feature-card').forEach((card, i) => {
    gsap.from(card, {
      scrollTrigger: {
        trigger: card,
        start: 'top 80%',
        toggleActions: 'play none none none'
      },
      opacity: 0,
      y: 50,
      duration: 0.8,
      delay: i * 0.1
    });
  });

  // Stats counter animation
  const counters = document.querySelectorAll('.counter');
  if (counters.length > 0) {
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;
      const duration = 2000;
      const increment = target / (duration / 16);
      
      const animate = () => {
        if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(animate, 16);
        } else {
          counter.innerText = target;
        }
      };
      
      ScrollTrigger.create({
        trigger: counter,
        start: 'top 80%',
        onEnter: animate,
        once: true
      });
    });
  }
});

// Dark/Light mode toggle
const themeToggle = document.getElementById('themeToggle');
if (themeToggle) {
  themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    localStorage.setItem('theme', document.body.classList.contains('dark-mode') ? 'dark' : 'light');
  });

  // Check for saved theme preference
  if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark-mode');
  }
}