const smartgrid = require('smart-grid');

const settings = {
    columns: 12,
    offset: '20px',
    container: {
        maxWidth: '1240px',
        fields: '20px'
    },
    breakPoints: {
        lg: {
            width: "1240px"
        },
        md: {
            width: "1024px",
            fields: "15px"
        },
        sm: {
            width: "768px",
            offset: "15px"
        },
        xs: {
            width: "590px",
        }
    },
    oldSizeStyle: false,
    mobileFirst: false
};

smartgrid('./src/less/libs', settings);