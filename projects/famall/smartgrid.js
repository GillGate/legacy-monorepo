const smartgrid = require('smart-grid');

const settings = {
    columns: 12,
    offset: '15px',
    container: {
        maxWidth: '1920px',
        fields: '370px'
    },
    breakPoints: {
        llg: {
            width: "1800px",
            fields: "120px"
        },
        lg: {
            width: "1440px",
            fields: "30px"
        },
        mmd: {
            width: "1240px"
        },
        md: {
            width: "1024px",
        },
        sm: {
            width: "760px",
            fields: "15px"
        },
        xs: {
            width: "540px",
        }
    },
    oldSizeStyle: false,
    mobileFirst: false
};

smartgrid('./src/less', settings);