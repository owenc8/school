import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls, InnerBlocks } from '@wordpress/block-editor';
import { PanelBody, SelectControl } from '@wordpress/components';
import './editor.scss';
/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const blockProps = useBlockProps();

	const { aosAnimation } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Animation Settings', 'custom-animation-wrapper' ) }>
					{/* select field drop down for block editor  */}
					<SelectControl
						label={ __( 'AOS Animation', 'custom-animation-wrapper' ) }
						value={ aosAnimation }
						// animation options to use in the back end interface 
						options={ [
							{ label: __( 'None', 'custom-animation-wrapper' ), value: '' },
							{ label: __( 'Fade Up', 'custom-animation-wrapper' ), value: 'fade-up' },
							{ label: __( 'Fade Down', 'custom-animation-wrapper' ), value: 'fade-down' },
							{ label: __( 'Fade Left', 'custom-animation-wrapper' ), value: 'fade-left' },
							{ label: __( 'Fade Right', 'custom-animation-wrapper' ), value: 'fade-right' },
						] }
						onChange={ ( value ) => setAttributes( { aosAnimation: value } ) }
					/>
				</PanelBody>
			</InspectorControls>
			{/* aosAnimation is the animation value like fade up, down etc */}
			<div { ...blockProps } data-aos={ aosAnimation }>
				<InnerBlocks />
			</div>
		</>
	);
}
