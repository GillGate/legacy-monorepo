const smartgrid = require('smart-grid');

const settings = {
    columns: 12,
    offset: '0px',
    container: {
        maxWidth: '1100px',
        fields: '170px'
    },
    breakPoints: {
        lg: {
            width: "1240px",
            fields: "60px"
        },
        md: {
            width: "1024px"
        },
        sm: {
            width: "768px",
            fields: "30px"
        },
        xs: {
            width: "480px"
        }
    },
    oldSizeStyle: false,
    mobileFirst: false
};

smartgrid('./src/less', settings);