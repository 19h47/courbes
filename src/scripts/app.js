import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

import.meta.glob("../img/**/*");

ScrollTrigger.create({
	onUpdate: ({ progress }) => {
		if (progress <= 0) {
			document.documentElement.classList.add("is-on-top");
		} else {
			document.documentElement.classList.remove("is-on-top");
		}
	},
});
