<?php
namespace encryption;

class Hash
{
    
    /**
     * 创建一个hash字符串
     *
     * @param  string  $value
	 * @return string  $hash
     */
    public static function make($value)
    {
        $hash = password_hash($value, PASSWORD_BCRYPT);

        if ($hash === false) {
			
            throw new \think\exception\HttpException(500, '无法生成散列值');
        }

        return $hash;
    }

	
    /**
     * hash验证字符串
     *
     * @param  string  $value
     * @param  string  $hashedValue
     * @return bool
     */
    public static function check($value, $hashedValue)
    {
        if (empty($hashedValue)) {
            return false;
        }

        return password_verify($value, $hashedValue);
    }