<?php
    /*
    IN ORDER TO RUN TESTS,
    EXECUTE IN TERMINAL:

    php vendor/bin/phpunit tests/ExampleTest.php
    */

    include dirname(__FILE__)."/../components/tools.php";

    class ExampleTest extends \PHPUnit\Framework\TestCase
    {
        
        public function testTheTesting()
        {
            $this->assertTrue(true, true);
        }

        public function testMySQLConnection()
        {
            $mysqli = get_mysql_connection();
            $this->assertNotNull($mysqli);
        }

        public function testGetReview()
        {
            $mysqli = get_mysql_connection(true);
            $sql = "SELECT * FROM reviews WHERE id = 1";

            $result = $mysqli->query($sql);

            $row = $result->fetch_assoc();
            $this->assertTrue($result->num_rows == 1);
            $this->assertEquals($row["id"], 1);
            $this->assertEquals($row["ad_name"], "Test Ad");
            $this->assertEquals($row["drug_name"], "Test Drug");

            mysqli_free_result($result);
            $mysqli->close();
        }

    }
?>