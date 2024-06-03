import { load } from "piecesjs";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

import.meta.glob("../img/**/*");

load("c-accordion", () => import(`/src/scripts/components/Accordion.js`));
load("c-in-view", () => import(`/src/scripts/components/InView.js`));

ScrollTrigger.create({
	onUpdate: ({ progress }) => {
		if (progress <= 0) {
			document.documentElement.classList.add("is-on-top");
		} else {
			document.documentElement.classList.remove("is-on-top");
		}
	},
});

ScrollTrigger.create({
	scrub: 0.2,
	onUpdate: ({ progress }) => {
		if (progress <= 0) {
			document.documentElement.classList.add("is-on-top");
		} else {
			document.documentElement.classList.remove("is-on-top");
		}

		gsap.set('.js-logo', { rotation: 360 * progress })
	},
});

// gsap.timeline({
// 	scrollTrigger: {
// 		trigger: ".js-logo",
// 		pin: true,
// 		scrub: 0.2,
// 		start: 'top top',
// 		end: 'max',
// 	}
// })
// 	.to('#green', {
// 		rotation: 360 * 5,
// 		duration: 1, ease: 'none',
// 	})
