const smartgrid = require('smart-grid');

const settings = {
    columns: 12,
    offset: '30px',
    container: {
        maxWidth: '1920px',
        fields: '150px'
    },
    breakPoints: {
        llg: {
            width: "1880px",
            fields: "75px"
        },
        lg: {
            width: "1440px",
            fields: "30px"
        },
        mmd: {
            width: "1240px",
            offset: "10px"
        },
        md: {
            width: "1024px",
        },
        sm: {
            width: "768px",
        },
        xs: {
            width: "576px",
        }
    },
    oldSizeStyle: false,
    mobileFirst: false
};

smartgrid('./src/less/libs', settings);