/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */


/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {Element} Element to render.
 */
// export default function save() {
// 	return (
// 		<p { ...useBlockProps.save() }>
// 			{ 'Custom Animation Wrapper – hello from the saved content!' }
// 		</p>
// 	);
// }

import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

// retieve attributes (aosAnimation vlaue)
export default function Save( { attributes } ) {
	const { aosAnimation } = attributes;
	// block properties
	const blockProps = useBlockProps.save();

	return (
		// classes 
		<div { ...blockProps } data-aos={ aosAnimation }>
			{/* nested blocks here */}
			<InnerBlocks.Content />
		</div>
	);
}
