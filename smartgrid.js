module.exports = {
	filename: "_smart-grid",
	outputStyle: 'sass',
	columns: 12,
	offset: "30px",
	container: {
		maxWidth: "1365px",
		fields: "40px"
	},
	breakPoints: {
		xl: {
				width: '1200px'
		},
		lg: {
				width: "992px"
		},
		md: {
				width: "768px",
				offset: "30px",
				fields: "15px"
		},
		sm: {
				width: "576px"
		},
		xs: {
				width: "400px",
				offset: "30px",
				fields: "15px"
		}
	},
	mobileFirst: false
};