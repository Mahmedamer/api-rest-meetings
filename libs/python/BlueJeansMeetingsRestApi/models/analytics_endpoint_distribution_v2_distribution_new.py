# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr>   # noqa: E501

    OpenAPI spec version: 1.0.4402212019
    Contact: glenn@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six


class AnalyticsEndpointDistributionV2DistributionNew(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    """

    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'endpoint_type': 'str',
        'count': 'int'
    }

    attribute_map = {
        'endpoint_type': 'endpoint_type',
        'count': 'count'
    }

    def __init__(self, endpoint_type=None, count=None):  # noqa: E501
        """AnalyticsEndpointDistributionV2DistributionNew - a model defined in Swagger"""  # noqa: E501

        self._endpoint_type = None
        self._count = None
        self.discriminator = None

        if endpoint_type is not None:
            self.endpoint_type = endpoint_type
        if count is not None:
            self.count = count

    @property
    def endpoint_type(self):
        """Gets the endpoint_type of this AnalyticsEndpointDistributionV2DistributionNew.  # noqa: E501

        Name of endpoint device type  # noqa: E501

        :return: The endpoint_type of this AnalyticsEndpointDistributionV2DistributionNew.  # noqa: E501
        :rtype: str
        """
        return self._endpoint_type

    @endpoint_type.setter
    def endpoint_type(self, endpoint_type):
        """Sets the endpoint_type of this AnalyticsEndpointDistributionV2DistributionNew.

        Name of endpoint device type  # noqa: E501

        :param endpoint_type: The endpoint_type of this AnalyticsEndpointDistributionV2DistributionNew.  # noqa: E501
        :type: str
        """

        self._endpoint_type = endpoint_type

    @property
    def count(self):
        """Gets the count of this AnalyticsEndpointDistributionV2DistributionNew.  # noqa: E501

        Count of the number of device engagements  # noqa: E501

        :return: The count of this AnalyticsEndpointDistributionV2DistributionNew.  # noqa: E501
        :rtype: int
        """
        return self._count

    @count.setter
    def count(self, count):
        """Sets the count of this AnalyticsEndpointDistributionV2DistributionNew.

        Count of the number of device engagements  # noqa: E501

        :param count: The count of this AnalyticsEndpointDistributionV2DistributionNew.  # noqa: E501
        :type: int
        """

        self._count = count

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value
        if issubclass(AnalyticsEndpointDistributionV2DistributionNew, dict):
            for key, value in self.items():
                result[key] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, AnalyticsEndpointDistributionV2DistributionNew):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
