
import { Piece } from "piecesjs";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

class InView extends Piece {
	constructor() {
		super("InView");
	}

	mount() {
		gsap.from(this, {
			scrollTrigger: {
				start: 'top center+=50%',
				trigger: this,
				toggleClass: 'is-in-view',
				once: true
			}
		});
	}
}

customElements.define("c-in-view", InView);
