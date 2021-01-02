<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{page_title}</title>
</head>
<body>
    <h1>{page_heading}</h1>
    <p>DOB: {date|date(l dS F Y)}</p>
    <p>DOB: {date|date_modify(+5days)|date(l dS F Y)}</p>
    <p>Price: {price|local_currency(BDT)}</p>
    <p>Price: {offer|round(ceil)}</p>
    <h1>Applying Custome Filter View</h1>
    <h3>Mobile: {mobile|hideNumbers(6)}</h3>
    <h3>{page_heading} contains {page_heading|vowelscount} Vowels</h3>
</body>
</html>