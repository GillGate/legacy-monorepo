const smartgrid = require('smart-grid');

const settings = {
    columns: 12,
    offset: '30px',
    container: {
        maxWidth: '1440px',
        fields: '135px'
    },
    breakPoints: {
        llg: {
            width: "1440px",
            fields: "60px"
        },
        lg: {
            width: "1240px",
            fields: "30px"
        },
        md: {
            width: "1024px"
        },
        sm: {
            width: "768px",
        },
        xs: {
            width: "480px"
        }
    },
    oldSizeStyle: false,
    mobileFirst: false
};

smartgrid('./src/less', settings);