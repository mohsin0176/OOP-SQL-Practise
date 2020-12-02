<?php

mysqli_prepare($con,$sql);
mysqli_connect();
mysqli_stmt_bind_param();
mysqli_stmt_execute($result);
mysqli_stmt_close($result);
mysqli_stmt_fetch($result);
mysqli_stmt_store_result();
mysqli_stmt_num_rows($result);
mysqli_stmt_free_reslt();


?>