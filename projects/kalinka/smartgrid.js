const smartgrid = require('smart-grid');

const settings = {
    columns: 12,
    offset: '25px',
    container: {
        maxWidth: '1590px',
        fields: '30px'
    },
    breakPoints: {
        llg: {
            width: "1500px"
        },
        lg: {
            width: "1240px"
        },
        md: {
            width: "1024px",
        },
        sm: {
            width: "768px",
            fields: "20px"
        },
        xs: {
            width: "590px",
            fields: "10px"
        },
    },
    oldSizeStyle: false,
    mobileFirst: false
};

smartgrid('./src/less/libs', settings);