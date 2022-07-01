# Crud-PHP-JS-
Crud en base de datos usando ajax (XMLHTTP request)
NOTAS: 

1 - Hay un error al poner el codigo de javascript separado (en la master está en el index)
filter_content.js:202 Uncaught (in promise) TypeError: Error in invocation of contentFilterPrivate.isURLBlocked(string url, contentFilterPrivate.ElementType type, string sitekey): No matching signature.
    at FilterContent.isUrlFiltered_ (filter_content.js:202:44)
    at FilterContent.filterAssetsIfNeeded_ (filter_content.js:85:16)
    at FilterContent.filter_ (filter_content.js:78:10)
    at FilterContent.initialize_ (filter_content.js:181:10)
    at filter_content.js:30:46
    
No parece acectar al funcionamiento

2 - El la respuesta de las operaciones pone un ´1´ al final de la tabla. No encuentro la causa
