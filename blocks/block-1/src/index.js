import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText } from '@wordpress/block-editor';

registerBlockType('wp-gutenberg-practice-plugin/block-1', {
	apiVersion: 2,
	title: 'Block 1',
	category: 'text',
	attributes: {
		id: {
			type: 'string',
			default: `block-1-${Date.now()}`, // generates a unique id for each block instance
		},
		content: {
			type: 'string',
			source: 'meta',
			meta: 'block_1_meta'
		}
	},
	edit: ({ attributes, setAttributes }) => {
		const { content } = attributes;
		const blockProps = useBlockProps();
		return (
			<div {...blockProps}>
				<RichText
					tagName="p"
					onChange={(newContent) => setAttributes({ content: newContent })}
					value={content}
					placeholder="Hello, World!"
				/>
			</div>
		);
	},
	save: () => {
		// Meta blocks save nothing to the post_content
		return null;
	},
});
